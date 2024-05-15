/* Search */
import {crudFormQuery} from './formFunctions'

export default route => ({
  items: [],
  match: [],
  query: '',
  select(item) {
    this.query = ''
    this.match = []

    const pivot = this.$root.querySelector('.pivotTable')

    if (pivot !== null) {
      this.$dispatch('table-row-added-' + pivot.dataset.tableName)

      const tr = pivot.querySelector('table > tbody > tr:last-child')
      tr.querySelector('.pivotTitle').innerHTML = item.label
      tr.dataset.key = item.value

      this.$dispatch('table-reindex-' + pivot.dataset.tableName)
    }
  },
  async search() {
    if (this.query.length > 0) {
      let query = '&query=' + this.query

      const form = this.$el.closest('form')
      const formQuery = crudFormQuery(form.querySelectorAll('[name]'))

      fetch(route + query + (formQuery.length ? '&' + formQuery : ''))
        .then(response => {
          return response.json()
        })
        .then(data => {
          this.match = data
        })
    }
  },
})
