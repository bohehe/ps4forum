import axios from 'axios'

export function getPostsDetail (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}
