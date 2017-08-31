export default{
  install(Vue,options)
  {
    // Vue.prototype.API_URL = 'http://localhost:312/api'
    // Vue.prototype.SERVER_URL = 'http://localhost:312'
    Vue.prototype.isEmptyObject = function(obj) {
		  for (var key in obj) {
		    return false
		  }
		  return true
		}
  }
}
