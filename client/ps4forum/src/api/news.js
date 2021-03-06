import axios from 'axios'

export function getNewsList (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserLeftInfo (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getNewsContent (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}