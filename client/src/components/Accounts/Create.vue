<script>
  export default {
    name: 'accounts-create',
    data: function () {
      return {
        sub_title: 'Criando conta',
        account: {
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
      }
    },
    template: require('./form.html'),
    methods: {
      save () {
        this.$store.dispatch('newAccount', this.account).then(() => {
          this.$router.push('/contas')
        })
      }
    },
    computed: {
      banks () {
        return this.$store.state.bank.bankList
      }
    },
    created () {
      this.$store.dispatch('getBanks')
    }
  }
</script>
