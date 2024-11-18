"use strict"

const myButton = document.getElementById("myButton"); 
const second = document.getElementById("second");

myButton.addEventListener('click', () => 
{
    let i = 0;
    async function test() { 
        const loop = async () => { 
            for (i = 0; i <= 10000000000; i++) {} 
        };
        await loop(); 
        console.log(i);
    }
    test();
});

second.addEventListener("click", () => {
    console.log('Hey!!');
});