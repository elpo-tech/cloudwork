<script>
  function train(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "You have not paid for this training",
      text: "Pay To Proceed",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Pay"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }


  function confirmationdman(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Are you Sure You Want To Delete User Account?",
      text: "You won't be able to Undo the change",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete User Account!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }



  function confirmationdcu(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Are you Sure You Want To Delete Customer?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdsup(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Are you Sure You Want To Delete Supplier?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationduni(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do You Want To Delete Unit?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes Delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdisco(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Are you Sure You Want To Delete Discount Rate?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }



  function confirmationtax(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do You Want To Delete Tax Rate?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }


  function confirmationdbra(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do You Want To Delete Brand?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdcat(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do You Want To Delete Category?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }



  function confirmationdscat(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do You Want To Delete Sub-Category?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }


  function confirmationdcu(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do You Want To Delete Currency?",
      text: "You won't be able to redo this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdpa(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do You Want To Delete Payment Method",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdpur(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want to Delete Purchase?",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationpr(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want to Return This Purchase",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Return Purchase!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }


  function confirmationdcat(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want to Delete Expense Category?",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }


  function confirmationdexp(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want to Delete Expense?",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }



  function confirmationcs(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want to Clear Items From Cart?",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Clear!"
    }).then((result) => {
      if (result.isConfirmed) {
        clearcell();

      }
    });
  }

  function confirmationdt(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want to Cancel Transaction",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdsale(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want Delete Sale Record?",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationsr(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want To Return This Product?",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Return"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdper(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want Delete Group Permission",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdb(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      title: "Do you want Delete This Bid",
      text: "You won't be able to redo this!",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: "#162C84",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete Bid"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = urlToRedirect;

      }
    });
  }

  function confirmationdba(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Order Already Approved!!"

    });
  }
</script>