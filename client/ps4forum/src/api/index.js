import axios from 'axios'

export function getIndexBannerList (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}

		// return new Promise((resolve, reject) => {
		// 	if (res.status == 200) {
		// 		resolve(res.data)
		// 	} else {
		// 		reject(err)
		// 	}
		// }).then(function (res) {
		// 	return res
		// }, function (err) {
		// 	console.log(err)
		// })
	})
}

export function getIndexPostsList (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getIndexHotGameList (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}
