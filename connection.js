document.addEventListener('DOMContentLoaded', () => {
    const incomeForm = document.getElementById('income');
    const expenseForm = document.getElementById('expense');
    const incomeList = document.getElementById('incomes');
    const expenseList = document.getElementById('expenses');
    const totalIncomeElement = document.getElementById('total-income-amount');
    const totalExpenseElement = document.getElementById('total-expense-amount');
    const overviewIncomeElement = document.getElementById('overview-income-amount');
    const overviewExpenseElement = document.getElementById('overview-expense-amount');
    const balanceElement = document.getElementById('balance-amount');
    const analysisText = document.getElementById('analysis');

    let totalIncome = 0;
    let totalExpense = 0;

    incomeForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const incomeName = document.getElementById('income-name').value;
        const incomeAmount = parseFloat(document.getElementById('income-amount').value);

        if (incomeName && incomeAmount) {
            addIncome(incomeName, incomeAmount);
            updateTotalIncome(incomeAmount);

            // Clear the forms
            document.getElementById('income-name').value = '';
            document.getElementById('income-amount').value = '';
        }
    });

    expenseForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const expenseName = document.getElementById('expense-name').value;
        const expenseAmount = parseFloat(document.getElementById('expense-amount').value);

        if (expenseName && expenseAmount) {
            addExpense(expenseName, expenseAmount);
            updateTotalExpense(expenseAmount);

            // Clear the forms
            document.getElementById('expense-name').value = '';
            document.getElementById('expense-amount').value = '';
        }
    });

    function addIncome(name, amount) {
        const listItem = document.createElement('li');
        listItem.innerHTML = `${name} - $${amount.toFixed(2)}`;
        incomeList.appendChild(listItem);
    }

    function addExpense(name, amount) {
        const listItem = document.createElement('li');
        listItem.innerHTML = `${name} - $${amount.toFixed(2)}`;
        expenseList.appendChild(listItem);
    }

    function updateTotalIncome(amount) {
        totalIncome += amount;
        totalIncomeElement.textContent = totalIncome.toFixed(2);
        updateOverview();
    }

    function updateTotalExpense(amount) {
        totalExpense += amount;
        totalExpenseElement.textContent = totalExpense.toFixed(2);
        updateOverview();
    }

    function updateOverview() {
        overviewIncomeElement.textContent = totalIncome.toFixed(2);
        overviewExpenseElement.textContent = totalExpense.toFixed(2);
        const balance = totalIncome - totalExpense;
        balanceElement.textContent = balance.toFixed(2);

        // Update analysis
        if (balance > 0) {
            analysisText.textContent = `You have saved $${balance.toFixed(2)}. Keep up the good work!`;
        } else if (balance < 0) {
            analysisText.textContent = `You are overspending by $${Math.abs(balance).toFixed(2)}. Consider cutting back on expenses.`;
        } else {
            analysisText.textContent = 'Your income matches your expenses perfectly.';
        }
    }
});

//  functions
function openTab(evt, tabName) {
    const tabcontent = document.getElementsByClassName('tabcontent');
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = 'none';
    }

    const tablinks = document.getElementsByClassName('tablink');
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(' active', '');
    }

    document.getElementById(tabName).style.display = 'block';
    evt.currentTarget.className += ' active';
}

// Open the first tab by default
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.tablink').click();
});

