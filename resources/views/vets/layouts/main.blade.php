<!DOCTYPE html>
<html lang="en">
    @include('vets.partials.header')
<body data-screen="clinicDashboard">
    <div class="container my-3">
        <div class="row">
            @include('vets.partials.sidebar')
            @yield('page')
        </div>
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    console.log("Script Loaded");

    const tabLinks = document.querySelectorAll(".clinic-tab-link");
    const tabContents = document.querySelectorAll(".clinic-tab-content");

    // Identify screen uniquely (using body ID, class, or another attribute)
    const screenId = document.body.getAttribute("data-screen") || "defaultScreen";
    const storageKey = `activeTab_${screenId}`; // Unique key for each screen

    let activeTab = localStorage.getItem(storageKey) || "clinic-info"; // Default tab

    function activateTab(target) {
        console.log(`Activating Tab on ${screenId}:`, target);

        // Remove active class from all tab links
        tabLinks.forEach(tab => tab.classList.remove("active"));
        tabContents.forEach(content => content.style.display = "none");

        // Activate correct tab links
        document.querySelectorAll(`[data-target='${target}']`).forEach(tab => tab.classList.add("active"));
        let targetContent = document.getElementById(target);

        if (targetContent) {
            targetContent.style.display = "block";
            localStorage.setItem(storageKey, target);
        } else {
            console.log(`Error: Target content not found for ${screenId} -`, target);
        }
    }

    activateTab(activeTab); // Ensure the last active tab is set on page load

    tabLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            let target = this.getAttribute("data-target");
            activateTab(target);
        });
    });
});
</script>

     <!-- Include Fancybox JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- Fancy Box Script CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
     <!-- Light Slider Script CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
    @include('client.partials.footer')
</html>
