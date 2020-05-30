<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <p>Do you agree to pay?</p>
            <form action="/user/upgradetobusiness" method="POST">
                <div class="form-group">
                    <input type="radio" class="form-check-control" id="yes" name="question" value="yes">
                    <label for="yes">Yes</label>
                </div>
                <div class="form-group">
                    <input type="radio" class="form-check-control" id="no" name="question" value="no">
                    <label for="no">No</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>