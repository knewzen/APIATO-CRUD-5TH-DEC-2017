<?php

namespace App\Containers\Authentication\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\UI\WEB\Requests\LoginRequest;
use App\Containers\Authentication\UI\WEB\Requests\ViewDashboardRequest;
use App\Ship\Parents\Controllers\WebController;
use Exception;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginPage()
    {
        return view('authentication::login');
    }

    public function showUserLoginPage()
    {
        return view('authentication::userlogin');
    }

    /**
     * @param \App\Containers\Authentication\UI\WEB\Requests\LoginRequest $request
     *
     * @return  \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginAdmin(LoginRequest $request)
    {
        try {
            $result = Apiato::call('Authentication@WebAdminLoginAction', [$request]);
        } catch (Exception $e) {
            return redirect('login')->with('status', $e->getMessage());
        }

        return is_array($result) ? redirect('login')->with($result) : redirect('dashboard');
    }

    public function loginUser(LoginRequest $request)
    {

        try {
            $result = Apiato::call('Authentication@WebLoginAction', [$request]);
        } catch (Exception $e) {
            return redirect('login-user')->with('status', $e->getMessage());
        }

        return is_array($result) ? redirect('login-user')->with($result) : redirect('/blogs');
   }

    /**
     * @param \App\Containers\Authentication\UI\WEB\Requests\ViewDashboardRequest $request
     *
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewDashboardPage(ViewDashboardRequest $request)
    {
        return view('authentication::dashboard');
    }

    /**
     * @return  \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logoutAdmin()
    {
        Apiato::call('Authentication@WebLogoutAction');

        return redirect('login');
    }

    public function logoutUser()
    {
        Apiato::call('Authentication@WebLogoutAction');

        return redirect('/login-user');
    }

}
