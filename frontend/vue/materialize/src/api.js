import Vue from 'vue'
import axios from 'axios'

const client = axios.create({
  baseURL: 'http://localhost/micro',
  json: true
})

let mod;

export default {
  async execute (method, resource, data) {
    // inject the accessToken for each request
    // let accessToken = await Vue.prototype.$auth.getAccessToken()
    return client({
      method,
      url: resource,
      data,
      // headers: {
      //   Authorization: `Bearer ${accessToken}`
      // }
    }).then(req => {
      return req.data
    })
  },
  getAll (module) {
    return this.execute('get', `/${module}`)
  },
  getItem (module, id) {
    return this.execute('get', `/${module}/${id}`)
  },
  createItem (module, data) {
    return this.execute('post', `/${module}`, data)
  },
  updateItem (module, id, data) {
    return this.execute('put', `/${module}/${id}`, data)
  },
  deleteItem (module, id) {
    return this.execute('delete', `/${module}/${id}`)
  }
}