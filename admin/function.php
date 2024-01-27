<?php
    function get_user_count()
    {
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $count_user="";
        $query = "select count(*) as count_user from user";
        $query_run=mysqli_query($connection, $query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $count_user = $row['count_user'];
        }
        return ($count_user);
    }

    function get_book_count()
    {
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $count_book="";
        $query = "select count(*) as count_book from book";
        $query_run=mysqli_query($connection, $query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $count_book = $row['count_book'];
        }
        return ($count_book);
    }

    function get_category_count()
    {
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $count_cat="";
        $query = "select count(*) as cat_book from category";
        $query_run=mysqli_query($connection, $query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $count_cat = $row['cat_book'];
        }
        return ($count_cat);
    }

    function get_issu_count()
    {
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $issu_book="";
        $query = "select count(*) as issu_book from issuedbook";
        $query_run=mysqli_query($connection, $query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $issu_book  = $row['issu_book'];
        }
        return ($issu_book);
    }

    function get_author_count()
    {
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $author="";
        $query = "select count(*) as issu_book from author";
        $query_run=mysqli_query($connection, $query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $author  = $row['issu_book'];
        }
        return ($author);
    }
?>