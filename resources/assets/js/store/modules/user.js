import { login, logout, getInfo, signUp } from '@/api/auth';
import { getToken, setToken, removeToken } from '@/utils/auth';
import store from '@/store';

const state = {
  user : '',
  id: null,
  token: getToken(),
  name: '',
  avatar: '',
  introduction: '',
  roles: [],
  permissions: [],
};

const mutations = {
  SET_USER: (state, user) => {
    state.user = JSON.stringify(user);
  },
  SET_ID: (state, id) => {
    state.id = id;
  },
  SET_TOKEN: (state, token) => {
    state.token = token;
  },
  SET_INTRODUCTION: (state, introduction) => {
    state.introduction = introduction;
  },
  SET_NAME: (state, name) => {
    state.name = name;
  },
  SET_AVATAR: (state, avatar) => {
    state.avatar = avatar;
  },
  SET_ROLES: (state, roles) => {
    state.roles = roles;
  },
  SET_PERMISSIONS: (state, permissions) => {
    state.permissions = permissions;
  },
};

const actions = {
  // user login
  login({ commit }, userInfo) {
    const { email, password } = userInfo;
    return new Promise((resolve, reject) => {
      login({ email: email.trim(), password: password })
        .then(response => {
          commit('SET_TOKEN', response.token);
          setToken(response.token);
          resolve();
        })
        .catch(error => {
          console.log(error, 1312321)
          reject(error);
        });
    });
  },

  // user login
  register({ commit }, userInfo) {
    const { email, password } = userInfo;
    return new Promise((resolve, reject) => {
      login({ email: email.trim(), password: password })
        .then(response => {
          commit('SET_TOKEN', response.token);
          setToken(response.token);
          resolve();
        })
        .catch(error => {
          console.log(error, 1312321)
          reject(error);
        });
    });
  },


  // get user info
  getInfo({ commit, state }) {
    return new Promise((resolve, reject) => {
      getInfo(state.token)
        .then(response => {
          const { data } = response;

          if (!data) {
            reject('Verification failed, please Login again.');
          }
          // Changed to an empty roles variable
          var roles = [];
          const { name, avatar, introduction, id } = data;
          // roles must be a non-empty array
          if (!roles || roles.length <= 0){
          // reject('getInfo: roles must be a non-null array!');
          }
          roles = ['admin'];
          commit('SET_ROLES', roles);
          // commit('SET_PERMISSIONS', permissions);
          commit('SET_NAME', name);
          commit('SET_AVATAR', avatar);
          commit('SET_INTRODUCTION', introduction);
          commit('SET_ID', id);
          resolve(data);
        })
        .catch(error => {
          reject(error);
        });
    });
  },

  // user logout
  logout({ commit, state }) {
    return new Promise((resolve, reject) => {
      logout(state.token)
        .then(() => {
          commit('SET_TOKEN', '');
          commit('SET_ROLES', []);
          removeToken();
          resolve();
        })
        .catch(error => {
          reject(error);
        });
    });
  },

  // remove token
  resetToken({ commit }) {
    return new Promise(resolve => {
      commit('SET_TOKEN', '');
      commit('SET_ROLES', []);
      removeToken();
      resolve();
    });
  },

  // Dynamically modify permissions
  changeRoles({ commit, dispatch }, role) {
    return new Promise(async resolve => {
      // const token = role + '-token';

      // commit('SET_TOKEN', token);
      // setToken(token);

      // const { roles } = await dispatch('getInfo');

      const roles = [role.name];
      const permissions = role.permissions.map(permission => permission.name);
      commit('SET_ROLES', roles);
      commit('SET_PERMISSIONS', permissions);

      // generate accessible routes map based on roles
      const accessRoutes = await store.dispatch('permission/generateRoutes', { roles, permissions });

      // dynamically add accessible routes

      resolve();
    });
  },
};

export default {
  namespaced: true,
  state,
  mutations,
  actions,
};
