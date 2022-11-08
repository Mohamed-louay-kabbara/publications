function httpRequest(method, url, data, callback) {
    // console.log('kr From httpRequest')
    // $("body").addClass("Myloading")
    // axios

    axios({
        method: method,
        url: url,
        data: data
    })
        .then((response) => {
            let state = response.status
            if (state === 200) {
                // Swal.fire(response.statusText, response.data.message, "success");
            // console.log(response.data)
                callback(response.data)

            }
        })
        .catch((error) => {
            console.log(error)
            let resError = error.response.data.meta.errors

            let errors = `<ul>`
            for (let er in resError)
                errors += `<li>${resError[er]}</li>`
            errors += `</ul>`
            Swal.fire(error.response.data.meta.message, errors, "error")
        })
}
