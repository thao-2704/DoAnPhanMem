const togglePersonView = (list, person) => {
    visionToggle(list);
    visionToggle(person);
}

const toggleDoneTask = () => {
    let historyItems = document.querySelectorAll('.history-item');
    historyItems.forEach(element => {
        let childEleCount = element.childElementCount;
        console.log(childEleCount);
        if (childEleCount < 3) {
            element.classList.toggle('hide');
        }
    });
}