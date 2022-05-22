<!--
    Counts for dashboard
-->

<?php 
    function get_counts(){
        $pdo = $GLOBALS['pdo'];

        $queryBookCount = $pdo->prepare('SELECT Count(*) FROM books');
        $queryBookCount->execute();
        $bookCount = $queryBookCount->fetch()['Count(*)'];

        $queryLoanCount = $pdo->prepare('SELECT Count(*) FROM books WHERE is_issued = 1');
        $queryLoanCount->execute();
        $loanCount = $queryLoanCount->fetch()['Count(*)'];

        $queryMemberCount = $pdo->prepare('SELECT Count(*) FROM members');
        $queryMemberCount->execute();
        $memberCount = $queryMemberCount->fetch()['Count(*)'];

        $result = array(
            'books' => array('count' => $bookCount),
            'loans' => array('count' => $loanCount),
            'members' => array('count' => $memberCount));

        return $result;
    }
?>