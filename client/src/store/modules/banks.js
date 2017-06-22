import Vue from 'vue'

export default {
  state: {
    bankList: []
  },
  mutations: {
    updateBankList (state, data) {
      state.bankList = data
    }
  },
  actions: {
    getBanks (context) {
      Vue.http.get('api/v1/banks?limit=200').then(response => {
        context.commit('updateBankList', response.data)
      })
    }
  }
}
