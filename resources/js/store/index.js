import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        alertMessage: '',
        alertColor: '',
        alertIsActive: false,
  },
    getters: {
        alertMessage: (state) => state.alertMessage,
        alertIsActive: (state) => state.alertIsActive,
    },
    mutations: {
        setMessage(state, message) {
            state.alertMessage = message;
        },
        setAlertState(state, alertStateBool) {
            state.alertIsActive = alertStateBool;
        }
  },
  actions: {
        setAlert({commit}, {type, name}) {
            let alertMessage = '';
            name = name.charAt(0).toUpperCase() + name.slice(1);
            if (type === 'create') {
                alertMessage = `New ${name.toLowerCase()} has been added successfully.`;
            } else if (type === 'edit') {
                alertMessage = `${name} has been edited successfully.`;
            } else if (type === 'delete') {
                alertMessage = `${name} has been deleted successfully.`;
            } else if (type === 'notification') {
                alertMessage = `Notification has been sent successfully.`;
            }

            commit('setMessage', alertMessage);
            commit('setAlertState', true);
            setTimeout(() => {
                commit('setAlertState', false);
            }, 2000);
        }

  },
  modules: {}
})
