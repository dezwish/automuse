
// Typewriter
const words = ['Smart choices, happy driving.', 'Trusted quality, reliable performance.', 'Local cars, community values.', 'Quality Cars, Secondhand Joy.']

    let mainTimeline = gsap.timeline({
        repeat: -1
    })

    words.forEach(word => {
        let textTimeline = gsap.timeline({
            repeat: 1,
            yoyo: true,
            repeatDelay: 10
        })

        textTimeline.to('#typewriter', {
            text: word,
            duration: 1.5,
            onUpdate: () => {
                cursorTimeline.restart()
                cursorTimeline.pause()
            },
            onComplete: () => {
                cursorTimeline.play()
            }
        })

        mainTimeline.add(textTimeline)
    })

    let cursorTimeline = gsap.timeline({
        repeat: -1,
        repeatDelay: .8
    })

    cursorTimeline.to('#cursor', {
        opacity: 1,
        duration: 0
    }).to('#cursor', {
        opacity: 0,
        duration: 0,
        delay: .8
    })

    
// sticky searchbar

    window.addEventListener("scroll", function(){
        const header = document.querySelector(".searchbar");
        header.classList.toggle("sticky", window.scrollY > 0)
    })


// scroll animation 

// slider
const carousel = document.querySelector(".hotPicksSlide");
arrowIcons  = document.querySelectorAll(".hotPicks .fa-solid");
firstImg  = carousel.querySelectorAll(".contentSlide")[0];


let isDragStart = false, prevPageX, prevScrollLeft;
let firstImgWidth = firstImg.clientWidth + 20;
let scrollWidth = carousel.scrollWidth - carousel.clientWidth;

const showHideIcons = () => {
    arrowIcons[0].style.display = carousel.scrollLeft == 0? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        carousel.scrollLeft += icon.id == "left-arrow" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60);
    })
})

const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touched[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragStart) return;
    e.preventDefault();
    carousel.classList.add("dragging");
    let positionDiff = (e.pageX || e.touched[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
}

carousel.addEventListener("mousedown", dragStart)
carousel.addEventListener("mousemove", dragging)
carousel.addEventListener("mouseup", dragStop)
carousel.addEventListener("mouseleave", dragStop)

carousel.addEventListener("touchdown", dragStart)
carousel.addEventListener("touchmove", dragging)
carousel.addEventListener("touchup", dragStop)
carousel.addEventListener("touchleave", dragStop)


//time

function updateTime() {
    var now = new Date();
    var timeString = now.toLocaleTimeString();
    document.getElementById("time").innerHTML = timeString;
  }

  updateTime();
  setInterval(updateTime, 1000);