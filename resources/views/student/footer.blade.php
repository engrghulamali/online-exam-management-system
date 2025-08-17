<!-- Footer -->
<footer class="footer mt-auto">
  <div class="footer-container">
    <p class="footer-text">© {{ date('Y') }} Your Company. All rights reserved.</p>
  </div>
</footer>

<style>
  body {
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .footer {
    background: linear-gradient(135deg, darkcyan, #1d8348);
    color: white;
    padding: 20px 0;
    position: relative;
    width: 100%;
  }

  .footer-container {
    max-width: 1200px;
    margin: auto;
    text-align: center;
    padding: 0 20px;
  }

  .footer-nav {
    list-style: none;
    padding: 0;
    margin: 0 0 10px;
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
  }

  .footer-nav .nav-link {
    color: white;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s, transform 0.3s;
  }

  .footer-nav .nav-link:hover {
    color: #ffdd57;
    transform: translateY(-3px);
  }

  .footer-text {
    font-size: 14px;
    opacity: 0.8;
    margin: 0;
  }
</style>



</body>
</html>
