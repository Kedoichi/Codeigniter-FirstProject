<div class="storeContainer">
    <div class="storeHeader">
        <div class="title">
            <h1>Employee</h1>
        </div>
        <div class="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" class="input" placeholder="Search">
        </div>
        <div class="add">
            <button>+ Add Employee</button>
        </div>
    </div>


    <div class="filter">
        <select>
            <option value="null">Choose Branch</option>
            <option value="start">Start</option>
            <option value="stop">Stop</option>
        </select>
        <select>
            <option value="A/Z">A/Z</option>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
        </select>
    </div>


    <div class="employeeList">
        <?php foreach ($employees as $employee) : ?>
            <div class="employeeCard">
                <div class="picture">
                    <i class="fa-sharp fa-solid fa-3x fa-user"></i>
                </div>
                <div class="detail">
                    <div class='employeeName'><?= $employee['name'] ?></div>
                    <div class='employeeDes'>
                        <p><?= $employee['phone'] ?></p>
                    </div>
                </div>
                <div class="button">
                    <div class="document">
                        <i class="fa-regular fa-2x fa-folder"></i>
                        <p>Documents</p>
                    </div>
                    <div class="tools">
                        <div class="edit">
                            <i class="fa-solid fa-1x fa-pen"></i>
                        </div>

                        <div class="delete"data-id="<?= $employee['id'] ?>">
                            <i class="fa-regular fa-1x fa-trash-can"></i>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

        <div class="pagination">
            <!-- <a href="#"><</a> <p>Page 1/2</p> <a href="#">></a> -->
        </div>
    </div>