
<nav aria-label="Page navigation">
    <ul class="pagination pagination-color justify-content-center">
        <li class="page-item">
            <a class="page-link" href="" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php 
        for($x = 1; $x < 6; $x++) {
            ?>
            <li class="page-item">
                <a class="page-link" href=""><?php echo $x; ?></a>
            </li>
            <?php
        }
        ?>
        <li class="page-item">
            <a class="page-link" href="" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
