const dataPayment = [
    { payment_method_code: "", payment_value: "", cheque_no: "" },
];

const addCashBank = () => {
    let payment_method_code = document.getElementById("payment_method_code");
    let payment_value = document.getElementById("payment_value");
    let cheque_no = document.getElementById("cheque_no");
    dataPayment.push({ payment_method_code, payment_value, cheque_no });
    console.log(dataPayment);
};
