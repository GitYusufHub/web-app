public function index()
{
    $viewData = new stdClass();

    // Portföy ve kategori verilerini çekme
    $this->load->model("portfolio_category_model");
    $this->load->model("portfolio_model");

    $categories = $this->portfolio_category_model->get_all(array("isActive" => 1));
    $portfolio = $this->portfolio_model->get_all(array("isActive" => 1));

    // View'e gönderilecek değişkenlerin set edilmesi
    $viewData->viewFolder = $this->viewFolder;
    $viewData->subViewFolder = "list";
    $viewData->categories = $categories;
    $viewData->portfolio = $portfolio;

    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
}
