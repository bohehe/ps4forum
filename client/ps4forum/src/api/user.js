import axios from 'axios'

export function getUserBgImg (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserMsg (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserMsgList (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserReply (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserCollection (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserPosts (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserFollow (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}

export function getUserTrade (url, params) {
	return axios.get(url, {
		params: params
	}).then(res => {
		if (res.status == 200) {
			return Promise.resolve(res.data)
		}
	})
}