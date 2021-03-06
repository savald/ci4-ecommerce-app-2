/* IMAGE UPLOADER */
function upload() {
  document.getElementById("file-upload").click();
}

// VALIDATION
const registerForm = document.getElementById("reg_form");
const loginForm = document.getElementById("log_form");

registerForm.addEventListener("submit", (e) => {
  // Register Input
  const nameInput = document.getElementById("reg_name");
  const emailRegInput = document.getElementById("reg_email");
  const passwordRegInput = document.getElementById("reg_password");
  e.preventDefault();
  checkInputs(nameInput, emailRegInput, passwordRegInput);
});

loginForm.addEventListener("submit", (e) => {
  // Login Input
  const emailLogInput = document.getElementById("log_email");
  const passwordLogInput = document.getElementById("log_password");
  e.preventDefault();
  checkInputs(null, emailLogInput, passwordLogInput);
});

function checkInputs(name, email, password) {
  //get the values from the inputs
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  if (name != null) {
    const nameValue = name.value.trim();
    if (nameValue === "") {
      setErrorFor(name, "Please enter your name!");
    } else if (nameValue.length < 3) {
      setErrorFor(name, "Name must be at least 3 characters!");
    }
  }

  if (emailValue === "") {
    setErrorFor(email, "Email cannot be blank");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Email is not valid!");
  } else {
    // setSuccessFor(email);
  }

  if (passwordValue === "") {
    setErrorFor(password, "Password cannot be blank");
  } else if (passwordValue.length < 6) {
    setErrorFor(password, "Password must be at least 6 characters!");
  }
}

function setErrorFor(input, message) {
  input.classList.replace("border-gray-300", "border-rose-500");
  input.nextElementSibling.classList.replace("hidden", "block");
  input.nextElementSibling.innerHTML = message;
}

// function setSuccessFor(input) {
//   const formControl = input.parentElement;
//   formControl.className = "form-control success";
// }

function isEmail(email) {
  return /^[a-zA-Z0-9.! #$%&'*+/=? ^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email);
}

/* CREATE SLUG */
// const title = document.querySelector("#title");
// const slug = document.querySelector("#slug");

// title.addEventListener("change", function () {
//   fetch("/dashboard/posts/checkSlug?title=" + title.value)
//     .then((response) => response.json())
//     .then((data) => (slug.value = data.slug));
// });

/* PREVIEW IMAGE */
// function previewImage() {
//   const image = document.querySelector("#image");
//   const imgPreview = document.querySelector(".img-preview");

//   imgPreview.style.display = "block";

//   const oFReader = new FileReader();
//   oFReader.readAsDataURL(image.files[0]);

//   oFReader.onload = function (oFREvent) {
//     imgPreview.src = oFREvent.target.result;
//   };
// }

function imageData(url) {
  const originalUrl = url || "";
  return {
    previewPhoto: originalUrl,
    fileName: null,
    // emptyText: originalUrl ? "No new file chosen" : "No file chosen",
    updatePreview($refs) {
      var reader,
        files = $refs.input.files;
      reader = new FileReader();
      reader.onload = (e) => {
        this.previewPhoto = e.target.result;
        this.fileName = files[0].name;
      };
      reader.readAsDataURL(files[0]);
    },
    clearPreview($refs) {
      $refs.input.value = null;
      this.previewPhoto = originalUrl;
      this.fileName = false;
    },
  };
}

/* SET ADDRESS USER */
function setAddress() {
  return {
    showAddress: false,
    update: false,
    error: false,
    newAddress: {
      id: null,
      name: "",
    },
    addresses: [
      // { id: 1, name: "Banda Aceh" },
      // { id: 2, name: "Bandung" },
    ],
    showInputAddress() {
      this.update = false;
      if (this.newAddress.name === "") {
        this.showAddress = !this.showAddress;
      } else {
        this.newAddress.name = "";
        this.showAddress = true;
      }
    },
    addAddress() {
      if (this.newAddress.name === "") {
        this.error = true;
        return;
      }
      this.addresses.push({ id: this.addresses.length + 1, name: this.newAddress.name });
      this.newAddress.name = "";
    },
    removeAddress(addressId) {
      this.addresses.splice(this.addresses.indexOf(addressId), 1);
      this.newAddress.name = "";
      this.update = false;
    },
    editAddress() {
      this.showAddress = true;
      this.update = true;
      this.newAddress.name = this.address.name;
      this.newAddress.id = this.address.id;
    },
    updateAddress(addressId, addressName) {
      if (this.newAddress.name === "") {
        this.error = true;
        return;
      }
      this.addresses[addressId - 1].name = addressName;
      this.newAddress.name = "";
      this.update = false;
    },
  };
}

/* SET CATEGORIES */
function getCategories() {
  return {
    selectedCategory: "",
    selectedSubcategory: "",
    parentCategories: ["Style & Fashion", "Electronics", "Sports", "Toys & Hobbies", "Personal Care", "Tools & Outdoors", "Furniture & Appliances"],
    subcategories: {
      "Style & Fashion": [
        {
          Men: {
            Topwear: ["Shirts", "T-Shirts", "Suits", "Pyjamas", "Uniforms", "Tanktop", "Underwear", "Jackets", "Sweaters", "Blazers", "Coats", "Hoodles"],
            Bottomwear: ["Pants", "Trousers", "Jeans", "Boxer Shorts"],
            Footwear: ["Shoes", "Sneakers", "Boots", "Sandals", "Socks"],
          },
        },
        {
          Women: {
            topwear: ["Shirts", "T-Shirts", "Dresses", "Suits", "Hijab", "Pyjamas", "Uniforms", "Tanktop", "Underwear", "lingerie", "Jackets", "Sweaters", "Blazers", "Coats", "Hoodles"],
            bottomwear: ["Pants", "Trousers", "Jeans", "Leggings", "Skirts", "Boxer Shorts"],
            footwear: ["Shoes", "High Heels", "Sneakers", "Boots", "Sandals", "Socks"],
          },
        },
        { "Kids & Babies": {} },
      ],
      Electronics: ["Laptops & Accessories", "Computers & Accessories", "Gaming accessories", "Smartphones & Accessories", "Smartwatches", "TV & Video", "Headphones", "Tablets", "Photography & Videography", "Office Electronics"],
      Sports: ["Sportswear", "Fitness"],
      "Toys & Hobbies": [],
      "Personal Care": ["Health", "Beauty"],
      "Tools & Outdoors": [],
      "Furniture & Appliances": ["Home & Kitchen", "Office"],
    },
  };
}
