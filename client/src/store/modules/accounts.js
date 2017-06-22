import Vue from 'vue'

export default {
  state: {
    accountList: [],
    accountView: {}
  },
  mutations: {
    updateAccountList (state, data) {
      state.accountList = data
    },
    updateAccountView (state, data) {
      state.accountView = data
    }
  },
  actions: {
    getAccounts (context) {
      Vue.http.get('api/v1/accounts').then(response => {
        context.commit('updateAccountList', response.data)
      })
    },
    getAccount (context, id) {
      Vue.http.get('api/v1/accounts/' + id).then(response => {
        context.commit('updateAccountView', response.data)
      })
    },
    newAccount (context, data) {
      Vue.http.post('api/v1/accounts', JSON.stringify({data: data}))
    },
    updateAccount (context, params) {
      let data = JSON.stringify({data: params})
      Vue.http.patch('api/v1/accounts/' + params.id, data)
    },
    removeAccount (context, id) {
      let data = {
        'data': {
          'type': 'accounts',
          'id': id
        }
      }
      Vue.http.delete('api/v1/accounts/' + id, JSON.stringify(data))
    }
  }
}
