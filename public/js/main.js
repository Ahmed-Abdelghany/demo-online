
function filter(className,id) {
    let input,inputValue,main,subMain;
    input = document.getElementById(id);

    inputValue = input.value.toLowerCase();

    main = document.getElementById('main');
    subMain = main.getElementsByClassName(className)

    for(let i=0;i<subMain.length;i++){
        if(subMain[i].innerHTML.toLowerCase().includes(inputValue)){

                subMain[i].parentElement.parentElement.parentElement.style.display = ""

        }else{
                subMain[i].parentElement.parentElement.parentElement.style.display = "none"
        }
    }
}
