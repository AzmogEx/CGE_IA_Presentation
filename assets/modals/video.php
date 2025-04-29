<!-- Inclure jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Code HTML du modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="VideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl d-flex justify-content-center align-items-center">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="VideoModalLabel">Kit Vidéo sur les IA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <video id="modalVideo" controls class="w-100">
                            <source src="/assets/video-kit-num.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script jQuery pour mettre en pause la vidéo lors de la fermeture du modal -->
<script>
    $('#videoModal').on('hidden.bs.modal', function () {
        var video = document.getElementById('modalVideo');
        video.pause();
    });
</script>