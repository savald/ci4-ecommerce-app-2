const setup = () => {
  function getSidebarStateFromLocalStorage() {
    // if it already there, use it
    if (window.localStorage.getItem("isSidebarOpen")) {
      return JSON.parse(window.localStorage.getItem("isSidebarOpen"));
    }

    // else return the initial state you want
    return false;
  }

  function setSidebarStateToLocalStorage(value) {
    window.localStorage.setItem("isSidebarOpen", value);
  }

  return {
    loading: true,
    isSidebarOpen: getSidebarStateFromLocalStorage(),
    toggleSidbarMenu() {
      this.isSidebarOpen = !this.isSidebarOpen;
      setSidebarStateToLocalStorage(this.isSidebarOpen);
    },
    isSettingsPanelOpen: false,
    isSearchBoxOpen: false,
  };
};

let data = [];
for (let i = 0; i < 100; i++) {
  let no = i + 1;
  data.push({
    no: no,
    product: "Sepatu",
    sku: "KTU-12-SED74",
    category: "Fashion",
    description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates. Quaerat magnam quisquam facilis nulla repellat quam ut quibusdam consectetur?",
    stock: 12,
    value: 120000,
    date: "14 April 2022",
  });
}

window.dataTable = function () {
  return {
    headings: [
      {
        key: "no",
        value: "#",
        width: 0,
      },
      {
        key: "product",
        value: "Product",
        width: 20,
      },
      {
        key: "sku",
        value: "SKU",
        width: 25,
      },
      {
        key: "category",
        value: "Category",
        width: 0,
      },
      {
        key: "description",
        value: "Description",
        width: 30,
      },
      {
        key: "stock",
        value: "Stock",
        width: 0,
      },
      {
        key: "value",
        value: "Value",
        width: 10,
      },
      {
        key: "date",
        value: "Date",
        width: 10,
      },
      {
        key: "action",
        value: "Action",
        width: 30,
      },
    ],
    items: [],
    view: 5,
    searchInput: "",
    pages: [],
    offset: 5,
    pagination: {
      total: data.length,
      lastPage: Math.ceil(data.length / 5),
      perPage: 5,
      currentPage: 1,
      from: 1,
      to: 1 * 5,
    },
    currentPage: 1,
    sorted: {
      field: "product",
      rule: "asc",
    },
    initData() {
      this.items = data.sort(this.compareOnKey("product", "asc"));
      this.showPages();
    },
    compareOnKey(key, rule) {
      return function (a, b) {
        if (key === "no" || key === "job" || key === "email" || key === "country") {
          let comparison = 0;
          const fieldA = typeof a[key] == "string" ? a[key].toUpperCase() : a[key];
          const fieldB = typeof b[key] == "string" ? b[key].toUpperCase() : b[key];
          if (rule === "asc") {
            if (fieldA > fieldB) {
              comparison = 1;
            } else if (fieldA < fieldB) {
              comparison = -1;
            }
          } else {
            if (fieldA < fieldB) {
              comparison = 1;
            } else if (fieldA > fieldB) {
              comparison = -1;
            }
          }
          return comparison;
        } else {
          if (rule === "asc") {
            return a.year - b.year;
          } else {
            return b.year - a.year;
          }
        }
      };
    },
    checkView(index) {
      return index > this.pagination.to || index < this.pagination.from ? false : true;
    },
    checkPage(item) {
      if (item <= this.currentPage + 5) {
        return true;
      }
      return false;
    },
    search(value) {
      if (value.length > 0) {
        const options = {
          shouldSort: true,
          keys: ["product", "job", "email", "year"],
          threshold: 0,
        };
        // console.log(options);
        const fuse = new Fuse(data, options);
        this.items = fuse.search(value).map((elem) => elem.item);
      } else {
        this.items = data;
      }
      // console.log(this.items.length)

      this.changePage(1);
      this.showPages();
    },
    sort(field, rule) {
      // rule = rule === 'asc' ? 'asc' : rule
      console.log(rule);
      // return
      this.items = this.items.sort(this.compareOnKey(field, rule));
      this.sorted.field = field;
      this.sorted.rule = rule;
    },
    changePage(page) {
      if (page >= 1 && page <= this.pagination.lastPage) {
        this.currentPage = page;
        const total = this.items.length;
        const lastPage = Math.ceil(total / this.view) || 1;
        const from = (page - 1) * this.view + 1;
        let to = page * this.view;
        if (page === lastPage) {
          to = total;
        }
        this.pagination.total = total;
        this.pagination.lastPage = lastPage;
        this.pagination.perPage = this.view;
        this.pagination.currentPage = page;
        this.pagination.from = from;
        this.pagination.to = to;
        this.showPages();
      }
    },
    showPages() {
      const pages = [];
      let from = this.pagination.currentPage - Math.ceil(this.offset / 2);
      if (from < 1) {
        from = 1;
      }
      let to = from + this.offset - 1;
      if (to > this.pagination.lastPage) {
        to = this.pagination.lastPage;
      }
      while (from <= to) {
        pages.push(from);
        from++;
      }
      this.pages = pages;
    },
    changeView() {
      this.changePage(1);
      this.showPages();
    },
    isEmpty() {
      return this.pagination.total ? false : true;
    },
  };
};
