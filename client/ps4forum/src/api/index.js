import axios from 'axios'

export function getIndexBannerList (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		return Promise.resolve(res.data)
	})
}