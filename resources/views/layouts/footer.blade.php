</main>
<div class="toaster" style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div>
</div>

</body>

</html>
<script>
    function copyReferralLink() {
        // Get the referral link text
        console.log('Function is called');
        const referralLink = document.getElementById("referralLink").innerText;

        // Copy the text to the clipboard
        navigator.clipboard.writeText(referralLink)
            .then(() => {
                // SweetAlert2 Success Message
                Swal.fire({
                    title: "Success!",
                    text: "Referral link copied",
                    icon: "success",
                    timer: 2000, // Set timer for 2 seconds
                    timerProgressBar: true,
                    showConfirmButton: false 
                });
            })
            .catch(err => {
                console.error("Failed to copy referral link: ", err);
                // SweetAlert2 Error Message
                Swal.fire({
                    title: "Error!",
                    text: "Failed to copy referral link.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            });
    }
</script>
