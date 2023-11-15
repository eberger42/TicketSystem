import { setCssVar, colors } from 'quasar'
import { boot } from 'quasar/wrappers'

export default boot(() => {
  setCssVar('$test', '#1E6287')
});
