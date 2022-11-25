<section class="mx-auto mt-5">
   <div class="container d-flex flex-column">
    <form action="/user" method="POST" enctype="multipart/form-data">
    @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" name="name" id="form1Example1" class="form-control" />
          <label class="form-label" for="form1Example1">Name</label>
        </div>
        <div class="form-outline mb-4">
            <input type="number" name="age" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Age</label>
          </div>
        <div class="form-outline mb-4">
            <input type="text" name="nickname" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Nickname</label>
          </div>
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Email </label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" name="phone" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Phone</label>
          </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
      </form>
   </div>
</section>