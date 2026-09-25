


document.addEventListener("DOMContentLoaded",() => {
    // console.log(document.querySelector("#tie"));

    const typeItEffect = new TypeIt("#tie", {
    // startDelay:900,
    speed: 100,
    loop: true,
    waitUntilVisible: true,
    cursor: false

})
.type(typing1, {delay:1000})
.delete()
.pause(1000)
.type(typing2, {delay:1000})
.delete()
.pause(1000)
.type(typing3, {delay:1000})
.delete()
.pause(1000)
.go();
})
