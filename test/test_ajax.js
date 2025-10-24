// تأكد من تحميل jQuery قبل هذا السكريبت
$(document).ready(function() {

    // إرسال الفورم عبر AJAX
    $('#testform').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: 'test/submit_test.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                // عرض النتيجة داخل modal النتائج
                $('#test-result-modal2').html(response);

                // فتح modal النتائج عبر Bootstrap JS
                var resultModal = new bootstrap.Modal(document.getElementById('modal-autres-tests'));
                resultModal.show();

                // إغلاق modal الاختبار
                var testModalEl = document.getElementById('modaltest');
                var testModal = bootstrap.Modal.getInstance(testModalEl);
                if (testModal) testModal.hide();
            },
            error: function(xhr, status, error) {
                $('#test-result-modal2').html('<p style="color:red;">حدث خطأ، يرجى المحاولة لاحقًا.</p>');
                console.error(error);
            }
        });
    });

    // إزالة أي backdrop متراكمة عند إغلاق أي modal
    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('hidden.bs.modal', function() {
        // إزالة backdrop فقط إذا لم يكن هناك أي modal آخر ظاهر
        if (document.querySelectorAll('.modal.show').length === 0) {
            document.querySelectorAll('.modal-backdrop').forEach(function(backdrop) {
                backdrop.remove();
            });
            document.body.classList.remove('modal-open');
            document.body.style.overflow = 'auto';
        }
        });
    });
});