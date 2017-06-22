<script>
  export default {
    name: 'accounts-edit',
    data: function () {
      return {
        sub_title: 'Editando conta'
      }
    },
    methods: {
      save () {
        this.$store.dispatch('updateAccount', this.account).then(() => {
          this.$router.push('/contas')
        })
      }
    },
    template: require('./form.html'),
    computed: {
      banks () {
        return this.$store.state.bank.bankList
      },
      bank () {
        let defaultValue = {
          id: null,
          attributes: {
            title: null,
            code: null
          }
        }
        if (this.$store.state.account.accountView.included) {
          return this.$store.state.account.accountView.included[0]
        }
        return defaultValue
      },
      account () {
        let dafaultValue = {
          type: 'accounts',
          attributes: {
            account_number: null,
            agency: null,
            balance: 0,
            balance_initial: null,
            title: null,
            bank_id: null
          }
        }
        let account = this.$store.state.account.accountView.data || dafaultValue
        account.attributes.bank_id = this.bank.id
        return account
      }
    },
    created () {
      this.$store.dispatch('getBanks')
      this.$store.dispatch('getAccount', this.$route.params.id)
    }
  }
</script>
