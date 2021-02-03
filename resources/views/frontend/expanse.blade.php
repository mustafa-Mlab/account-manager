@include('frontend/layouts/header') 

<!-- Header file ends here -->

<div class="container-fluid ">
    <div class="content">
        <div class="main-wrap">
            <section class="expanse-heading mb-65">
                <h1 class="headline text-center">Your Expenses</h1>
                <h5 class="description text-center">Here you can see your daily expenses</h5>
            </section>
            <section class="form text-center mb-65">
                <form action="/expanse" method="GET">
                    <input type="datetime-local" name="from-date" id="from-date">
                    <input type="datetime-local" name="to-date" id="to-date">
                    <input type="submit" value="Search">
                </form>
            </section>
            <section class="data-table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Reason</th>
                            <th scope="col">Amount</th>
                            <th scope="col">time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mobile bil</td>
                            <td>56</td>
                            <td>11:24pm</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Internet Bil</td>
                            <td>1599</td>
                            <td>11:34pm</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Icecream</td>
                            <td>700</td>
                            <td>11:50pm</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
<!-- Footer stars from here -->
@include('frontend/layouts/footer')
