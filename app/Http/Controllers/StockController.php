<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use App\Country;
use App\CpaPrice;
use App\Offer;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as VoyagerBaseController;
use DB;
use Auth;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Models\Category;
class StockController extends VoyagerBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
