console.log('ffffff');
const TPF = document.getElementById("payform-tinkoff");

TPF.addEventListener("submit", function (e) {
    e.preventDefault();
    const {description, amount, email, phone, receipt} = TPF;

    if (receipt) {
        if (!email.value && !phone.value)
            return alert("Поле E-mail или Phone не должно быть пустым");

        TPF.receipt.value = JSON.stringify({
            "EmailCompany": "mail@mail.com",
            "Taxation": "patent",
            "Items": [
                {
                    "Name": description.value || "Оплата",
                    "Price":  parseFloat(amount.value),
                    "Quantity": 1.00,
                    "Amount": parseFloat(amount.value),
                    "PaymentMethod": "full_prepayment",
                    "PaymentObject": "service",
                    "Tax": "none"
                }
            ]
        });
    }
    pay(TPF);
})
