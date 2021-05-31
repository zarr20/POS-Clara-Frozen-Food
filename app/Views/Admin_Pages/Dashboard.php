<div>
    <div class="card-group">
        <div class="card">
            <img src="https://codingyaar.com/wp-content/uploads/bootstrap-4-card-image-left-demo-image.jpg" class="card-img-top" />
            <div class="card-body">
                <h5 class="card-title">Barang</h5>
                <p class="card-text">
                    13
                </p>
            </div>
        </div>
        <div class="card">
            <span class="bi bi-list card-img-top" aria-hidden="true" style="font-size: 20px;background: #00000038;padding: 0px 0.4em;border-radius: 3px;"></span>

            <div class="card-body">
                <h5 class="card-title">Barang</h5>
                <p class="card-text">
                    13
                </p>
            </div>
        </div>
        <div class="card">
            <img src="https://codingyaar.com/wp-content/uploads/bootstrap-4-card-image-left-demo-image.jpg" class="card-img-top" />
            <div class="card-body">
                <h5 class="card-title">Barang</h5>
                <p class="card-text">
                    13
                </p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Keuntungan</h5>
                <p class="card-text">Rp. 30.000</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>
</div>

<style>
    .card {
        flex-direction: row;
        align-items: center;
    }

    .card-title {
        font-weight: bold;
    }

    .card img {
        width: 30%;
        border-top-right-radius: 0;
        border-bottom-left-radius: calc(0.25rem - 1px);
    }

    @media only screen and (max-width: 768px) {
        a {
            display: none;
        }

        .card-body {
            padding: 0.5em 1.2em;
        }

        .card-body .card-text {
            margin: 0;
        }

        .card img {
            width: 50%;
        }
    }

    @media only screen and (max-width: 1200px) {
        .card img {
            width: 40%;
        }
    }
</style>