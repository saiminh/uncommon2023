export default function fullWHeader() {

  const fullWHeaders = document.querySelectorAll('.full-width-headline');

  function adjustFontSize(){
    fullWHeaders.forEach((fullWHeader) => {
      if (!fullWHeader.querySelector('.fullw')) {
        const originalText = fullWHeader.innerHTML;
        fullWHeader.innerHTML = '<span class="fullw">' + originalText + '</span>';
      }
      const span = fullWHeader.querySelector('.fullw');
      const spanWidth = span.offsetWidth;
      const parentWidth = fullWHeader.offsetWidth;
      const ratio = parentWidth / spanWidth;
      const fontSizeSpan = parseFloat(window.getComputedStyle(span, null).getPropertyValue('font-size'));
      const newFontSize = fontSizeSpan * ratio;
      span.style.fontSize = newFontSize + 'px';
      console.log('the new font size is: ' + newFontSize + 'px');
    })
  }
  
  window.addEventListener('DOMContentLoaded', function() {
    adjustFontSize();
  })
  window.addEventListener('resize', function() {
    adjustFontSize();
  })

}