/* IMAGE UPLOADER */
function upload() {
  document.getElementById("file-upload").click();
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
function previewImage() {
  const image = document.querySelector("#image");
  const imgPreview = document.querySelector(".img-preview");

  imgPreview.style.display = "block";

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}

/* SET ADDRESS USER */
function setAddress() {
  return {
    showAddress: false,
    newAddress: "",
    addresses: [],
    addAddress() {
      if (this.newAddress != "") {
        this.addresses.push({ id: this.addresses.length, newAddress: this.newAddress });
      }
      this.newAddress = "";
      return false;
    },
    removeAddress(addressId) {
      this.addresses.splice(this.addresses.indexOf(addressId), 1);
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
