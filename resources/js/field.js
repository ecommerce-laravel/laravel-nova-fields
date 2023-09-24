import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-tree-select', IndexField)
  app.component('detail-nova-tree-select', DetailField)
  app.component('form-nova-tree-select', FormField)
})
