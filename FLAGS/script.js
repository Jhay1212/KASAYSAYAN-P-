function main() {
    const sliders = document.querySelectorAll(".slider");
  
    sliders.forEach((slider) => {
      let index = 0;
      const wrapper = slider.querySelector(".slider-wrapper");
      const slides = slider.querySelectorAll(".slide");
      const slidesControls = slider.querySelector(".slider-controls");
      const leftBtn = slider.querySelector(".slide-control-left");
      const rightBtn = slider.querySelector(".slide-control-right");
  
      if (!slides) return
  
      function controls() {
        if (index === 0) {
          leftBtn.classList.add('slide-control-disabled')
        } else {
          leftBtn.classList.remove('slide-control-disabled')
        }
  
        if (index === slides.length - 1) {
          rightBtn.classList.add('slide-control-disabled')
        } else {
          rightBtn.classList.remove('slide-control-disabled')
        }
      }
      
      function setSlides() {
        slides.forEach((slide) => {
          slide.style.left =
            -(slidesControls.clientWidth * index + (24 * index)) + "px";
          slide.classList.remove("slide-active");
        });
        
        slides[index].classList.add("slide-active");
      }
  
      if (leftBtn && rightBtn) {
        leftBtn.addEventListener("click", () => {
          if (index > 0 && index <= slides.length) {
            index--;
            setSlides();
          }
          
          controls();
        });
  
        rightBtn.addEventListener("click", () => {
          if (index >= 0 && index < slides.length - 1) {
            index++;
            setSlides();
          }
          
          controls();
        });
      }
  
      controls();
    });
  }
  
  main();
  