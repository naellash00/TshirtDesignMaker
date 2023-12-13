// Function to change the T-shirt color based on user selection

function changeTshirtColor() {
  const tshirtImg = document.getElementById('tshirt-img');
  const canvasContainer = document.getElementById('canvas-container');
  const colorSelector = document.getElementById('color');

  switch (colorSelector.value) {
    case 'white':
      tshirtImg.src = 'Tshirts-images/WhiteT-shirt1.png';
      break;
    case 'yellow':
      tshirtImg.src = 'Tshirts-images/YallowT-shirt1.png';
      break;
    case 'pink':
      tshirtImg.src = 'Tshirts-images/PinkT-shirt1.png';
      break;
    case 'blue':
      tshirtImg.src = 'Tshirts-images/BlueT-shirt.png';
      break;
    case 'baby-pink':
      tshirtImg.src = 'Tshirts-images/BabyPinkT-shirt.png';
      break;
  }

}


// Function to customize the T-shirt with user input
function customizeTshirt() {
  const textOverlay = document.getElementById('text-overlay');
  const logoOverlay = document.getElementById('logo-overlay');
  const textInput = document.getElementById('text');
  const textColorInput = document.getElementById('text-color');
  const tshirtSizeInput = document.getElementById('tshirt-size');

  // Update text overlay content and color
  textOverlay.textContent = textInput.value;
  textOverlay.style.color = textColorInput.value;

  // Update T-shirt size
  const tshirtSize = tshirtSizeInput.value;
  const tshirtImg = document.getElementById('tshirt-img');
}

// Function to load and display the selected logo
function loadLogo() {
  const logoInput = document.getElementById('logo');
  const logoOverlay = document.getElementById('logo-overlay');
  const file = logoInput.files[0];

  if (file) {
    // Read the selected logo and set it as the background image
    const reader = new FileReader();
    reader.onload = function (e) {
      logoOverlay.style.backgroundImage = `url('${e.target.result}')`;
      resizeLogo();
    };
    reader.readAsDataURL(file);
  }
}
// Function to resize the displayed logo based on user input
function resizeLogo() {
  const logoOverlay = document.getElementById('logo-overlay');
  const logoSizeInput = document.getElementById('logo-size');
  const logoSize = logoSizeInput.value + 'px';

  // Set the width and height of the logo overlay
  logoOverlay.style.width = logoSize;
  logoOverlay.style.height = logoSize;

  // Make the logo overlay draggable
  logoOverlay.draggable = true;

  // Prevent the default drag behavior to enable custom dragging
  logoOverlay.addEventListener('dragstart', (e) => {
    e.preventDefault();
  });

  // Update the position of the logo overlay after dragging
  logoOverlay.addEventListener('dragend', (e) => {
    const x = e.clientX;
    const y = e.clientY;

    // Set the new position of the logo overlay
    logoOverlay.style.left = x + 'px';
    logoOverlay.style.top = y + 'px';
  });
}

// Example usage:
//$userID = getUserId();
//echo $userID; // Use $userID as needed in your application


function previousDesign() {
  console.log('previousDesign');
  var pageURL = 'saveD/previous-design.php';
  window.location.href = pageURL;
}
// Function to add the design to the shopping cart
function addToCart() {
  // Retrieve design details
  const userID = getUserId();
  const designName = document.getElementById('design_name').value;
  const price = calculatePrice(); // يجب عليك تنفيذ منطق حساب السعر
  const tshirtColorURL = document.getElementById('color').value;
  const productID = generateProductID(); // يجب عليك تنفيذ منطق إنشاء معرف المنتج
  const logoURL = document.getElementById('logo-overlay').style.backgroundImage;

  // إنشاء كائن يمثل التصميم
  const design = {
    user_id: userID,
    design_name: designName,
    price: price,
    tscolors_url: tshirtColorURL,
    product_id: productID,
    logo_url: logoURL
  };

  // استرجاع عناصر السلة الحالية من localStorage
  const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

  // إضافة التصميم إلى السلة
  cartItems.push(design);

  // حفظ عناصر السلة المحدثة في localStorage
  localStorage.setItem('cart', JSON.stringify(cartItems));

  // عرض رسالة نجاح أو أداء أي إجراء آخر حسب الحاجة
  alert('تمت إضافة التصميم إلى السلة بنجاح!');
}
// script.js

function handleTextEntry() {
  const textInput = document.getElementById('text');
  const wordCountMessage = document.getElementById('wordCountMessage');
  const wordLimit = 3;

  textInput.addEventListener('input', function () {
    const words = textInput.value.split(/\s+/).filter(function (word) {
      return word.length > 0;
    });

    if (words.length > wordLimit) {
      // Truncate the text to the desired word limit
      textInput.value = words.slice(0, wordLimit).join(' ');
    }

    const remainingWords = wordLimit - words.length;
    wordCountMessage.textContent = `Words remaining: ${remainingWords}`;
  });
}
document.addEventListener('DOMContentLoaded', function() {
  // Your code here
});


// Function to save the design without using JSON
function saveDesign() {
  
  const logoInput = document.getElementById('logo').files[0];
  const logoOverlay = document.getElementById('logo-overlay');
  const tshirtImg = document.getElementById('tshirt-img');
  const words = document.getElementById('text').value;
  const logoSize = document.getElementById('logo-size').value;
  const wordsColor = document.getElementById('text-color').value;
  const tshirtSize = document.getElementById('tshirt-size').value;
  const quantity = document.getElementById('quantity').value;
  const formData = new FormData();


  // Append the necessary data to the FormData object

  formData.append('logo_url',  logoOverlay.style.backgroundImage.slice(4, -1).replace(/['"]/g, ""));
  formData.append('logo_size', document.getElementById('logo-size').value);
  formData.append('tscolor_url', tshirtImg.src);
  formData.append('words', words);
  formData.append('words_color', wordsColor);
  formData.append('design_id', generateRandomNumber());
  formData.append('priproduct', '20$');
  formData.append('quantity', quantity);
 

  // Send the data to the server (save.php) for processing
  fetch('save.php', {
    method: 'POST',
    body: formData,
  })
  .then(response => response.text())
  .then(data => {
    console.log('Success:', data);
    alert('Design saved successfully!');
  })
  .catch((error) => {
    console.error('Error:', error);
    alert('Failed to save design.');
  });
}

// Function to get file extension from file name
function getFileExtension(filename) {
  const dotIndex = filename.lastIndexOf('.');
  if (dotIndex !== -1) {
    return filename.substring(dotIndex + 1);
  }
  return '';
}


function generateRandomNumber() {
  return Math.floor(Math.random() * 100); // يمكن تعديل الرقم 100 حسب الحاجة
}

// استخدام الوظيفة
var randomNumber = generateRandomNumber();
console.log(randomNumber);
