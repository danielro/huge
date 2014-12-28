<?php

class OverviewController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens when you move to /overview/index in your app.
     * Shows a list of all users.
     */
    function index()
    {
        $this->View->render('overview/index', array(
            'users' => $this->OverviewModel->getAllUsersPublicProfiles())
        );
    }

    /**
     * This method controls what happens when you move to /overview/showuserprofile in your app.
     * Shows the (public) details of the selected user.
     * @param $user_id int id the the user
     */
    function showUserProfile($user_id)
    {
        if (isset($user_id)) {
            $this->View->render('overview/showUserProfile', array(
                'user' => $this->OverviewModel->getUserPublicProfile($user_id))
            );
        } else {
            header('location: ' . URL);
        }
    }
}
