function submitGroup(e) {
    e.preventDefault();
    let group_modul_code = document.getElementById("group_modul_code").value;
    let group_modul_name = document.getElementById("group_modul_name").value;
    let group_modul_desc = document.getElementById("group_modul_desc").value;
    const requestData = {
        group_modul_code: group_modul_code,
        group_modul_name: group_modul_name,
        group_modul_desc: group_modul_desc,
    };

    // Konfigurasi untuk fetch
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify(requestData),
    };

    // Lakukan permintaan fetch
    fetch("api/coa/store-group", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            // Proses respons JSON
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-group-modul";
                }
            }
        })
        .catch((error) => {
            // Tangani kesalahan
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}
function deleteGroup(id) {
    const requestOptions = {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify({
            id: id,
        }),
    };

    fetch("api/coa/delete-group", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-group-modul";
                }
            }
        })
        .catch((error) => {
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function deleteModul(id) {
    const requestOptions = {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify({
            id: id,
        }),
    };

    fetch("api/coa/delete-modul", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-modul-management";
                }
            }
        })
        .catch((error) => {
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function groupCode(e) {
    let split_string = e.split("+");
    let id = split_string[0];
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify({
            id: id,
        }),
    };
    fetch("api/coa/get-group-name", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            const { group_modul_name, sts } = data;
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (sts == "N") {
                    alert("Error");
                } else {
                    document.getElementById("group_modul_name").value =
                        group_modul_name;
                }
            }
        })
        .catch((error) => {
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function submitModul(e) {
    e.preventDefault();
    let group_modul_code = document.getElementById("group_modul_code").value;
    let group_modul_name = document.getElementById("group_modul_name").value;
    let modul_code = document.getElementById("modul_code").value;
    let modul_name = document.getElementById("modul_name").value;
    let modul_description = document.getElementById("modul_description").value;
    let modul_status = document.getElementById("modul_status").value;
    let split_group_modul_code = group_modul_code.split("+");
    group_modul_code = split_group_modul_code[1];

    const requestData = {
        group_modul_code,
        group_modul_name,
        modul_code,
        modul_name,
        modul_description,
        modul_status,
    };

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify(requestData),
    };

    // Lakukan permintaan fetch
    fetch("api/coa/store-modul", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            // Proses respons JSON
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-modul-management";
                }
            }
        })
        .catch((error) => {
            // Tangani kesalahan
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function submitCredit(e) {
    e.preventDefault();
    let credit_term_code = document.getElementById("credit_term_code").value;
    let credit_term_name = document.getElementById("credit_term_name").value;
    let credit_term_value = document.getElementById("credit_term_value").value;
    let credit_term_status =
        document.getElementById("credit_term_status").value;

    // Definisikan data yang akan dikirim
    const requestData = {
        credit_term_code,
        credit_term_name,
        credit_term_value,
        credit_term_status,
    };

    // Konfigurasi untuk fetch
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify(requestData),
    };

    // Lakukan permintaan fetch
    fetch("api/coa/store-credit", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            // Proses respons JSON
            console.log(data)
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-credit-management";
                }
            }
        })
        .catch((error) => {
            // Tangani kesalahan
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function deleteCredit(id) {
    const requestOptions = {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify({
            id,
        }),
    };

    // Lakukan permintaan fetch
    fetch("api/coa/delete-credit", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            // Proses respons JSON
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-credit-management";
                }
            }
        })
        .catch((error) => {
            // Tangani kesalahan
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function submitCustomer(e) {
    e.preventDefault();
    let group_code = document.getElementById("group_code").value;
    let group_name = document.getElementById("group_name").value;
    let coa_code = document.getElementById("coa_code").value;
    let coa_name = document.getElementById("coa_name").value;
    let group_description = document.getElementById("group_description").value;
    let group_status = document.getElementById("group_status").value;

    const requestData = {
        group_code,
        group_name,
        group_description,
        coa_code,
        coa_name,
        group_status,
    };

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify(requestData),
    };

    // Lakukan permintaan fetch
    fetch("api/coa/store-customer", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            console.log(data)
            // Proses respons JSON
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-customer-supplier-group";
                }
            }
        })
        .catch((error) => {
            // Tangani kesalahan
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function deleteCustomer(id) {
    const requestOptions = {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify({
            id,
        }),
    };

    // Lakukan permintaan fetch
    fetch("api/coa/delete-customer", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            // Proses respons JSON
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-credit-management";
                }
            }
        })
        .catch((error) => {
            // Tangani kesalahan
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}

function submitSupplier(e) {
    e.preventDefault();
    let supplier_type_code =
        document.getElementById("supplier_type_code").value;
    let supplier_type_name =
        document.getElementById("supplier_type_name").value;
    let supplier_type_desc =
        document.getElementById("supplier_type_desc").value;
    let supplier_type_status = document.getElementById(
        "supplier_type_status"
    ).value;

    const requestData = {
        supplier_type_code,
        supplier_type_name,
        supplier_type_desc,
        supplier_type_status,
    };

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify(requestData),
    };

    // Lakukan permintaan fetch
    fetch("api/coa/store-supplier", requestOptions)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            // Proses respons JSON
            if (data.length == 0) {
                alert("Tidak Ada Data", "warning", "Warning");
            } else {
                if (data.sts == "N") {
                    alert("Error");
                } else {
                    alert("OK");
                    document.location.href = "/list-supplier-type-management";
                }
            }
        })
        .catch((error) => {
            // Tangani kesalahan
            console.error("There was an error!", error);
            alert("ERROR", "error", "Error \n" + error.message);
        });
}
