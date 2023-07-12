<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/assests/Admin/css/style.css">
    <script src="https://kit.fontawesome.com/337ff70aea.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">

        <div class="logo">
            <a href="#">Dashboard</a>
        </div>

        <div class="headerIcons">
            <i class="fas fa-bell"></i>
            <div class="account">
                <img src="/assests/Image/avt.png" alt="">
                <h4>Steven Vu</h4>
            </div>
        </div>
    </header>

    <div class="mainContainer">
        <nav>
            <div class="sideNavbar">
                <span>Main Menu</span>
                <a href="#" class="active">Stores</a>
                <a href="#">Documnets</a>
                <a href="#">Employess</a>


            </div>
            <div class="sideNavbar">
                <a href="#">Log Out</a>
            </div>
        </nav>

        <div class="containerContent">
            <div class="storeContainer">
                <div class="storeHeader">
                    <div class="title">
                        <h1>Stores</h1>
                    </div>
                    <div class="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        <input type="text" class="input" placeholder="Search">
                    </div>
                    <div class="add">
                        <button>+ Add Store</button>
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


                <div class="storeList">
                    <div class="storeCard">
                        <div class="picture">
                            <i class="fa-sharp fa-solid fa-3x fa-store"></i>
                        </div>
                        <div class="detail">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, perspiciatis?
                            </p>
                        </div>
                        <div class="button">
                            <div class="document">
                                <i class="fa-regular fa-2x fa-folder"></i>
                                <p>Documents</p>
                            </div>
                            <div class="employee">
                                <i class="fa-regular fa-2x fa-address-card"></i>
                                <p>Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="storeCard">
                        <div class="picture">
                            <i class="fa-sharp fa-solid fa-3x fa-store"></i>
                        </div>
                        <div class="detail">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, perspiciatis?
                            </p>
                        </div>
                        <div class="button">
                            <div class="document">
                                <i class="fa-regular fa-2x fa-folder"></i>
                                <p>Documents</p>
                            </div>
                            <div class="employee">
                                <i class="fa-regular fa-2x fa-address-card"></i>
                                <p>Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="storeCard">
                        <div class="picture">
                            <i class="fa-sharp fa-solid fa-3x fa-store"></i>
                        </div>
                        <div class="detail">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, perspiciatis?
                            </p>
                        </div>
                        <div class="button">
                            <div class="document">
                                <i class="fa-regular fa-2x fa-folder"></i>
                                <p>Documents</p>
                            </div>
                            <div class="employee">
                                <i class="fa-regular fa-2x fa-address-card"></i>
                                <p>Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="storeCard">
                        <div class="picture">
                            <i class="fa-sharp fa-solid fa-3x fa-store"></i>
                        </div>
                        <div class="detail">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, perspiciatis?
                            </p>
                        </div>
                        <div class="button">
                            <div class="document">
                                <i class="fa-regular fa-2x fa-folder"></i>
                                <p>Documents</p>
                            </div>
                            <div class="employee">
                                <i class="fa-regular fa-2x fa-address-card"></i>
                                <p>Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="storeCard">
                        <div class="picture">
                            <i class="fa-sharp fa-solid fa-3x fa-store"></i>
                        </div>
                        <div class="detail">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, perspiciatis?
                            </p>
                        </div>
                        <div class="button">
                            <div class="document">
                                <i class="fa-regular fa-2x fa-folder"></i>
                                <p>Documents</p>
                            </div>
                            <div class="employee">
                                <i class="fa-regular fa-2x fa-address-card"></i>
                                <p>Employees</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#"><</a>
                    <p>Page 1/2</p>
                    <a href="#">></a>
                </div>
            </div>
        </div>

    </div>
</body>