<?php
function main_menu() {
    $ci = & get_instance();
    $query = $ci->db->query("SELECT id_menu, nama_menu, link, id_parent FROM menu WHERE aktif='Ya' AND position='Bottom' ORDER BY urutan");
    $menu = array('items' => array(),'parents' => array());
    foreach ($query->result() as $menus) {
        $menu['items'][$menus->id_menu] = $menus;
        $menu['parents'][$menus->id_parent][] = $menus->id_menu;
    }
    if ($menu) {
        $result = build_main_menu(0, $menu);
        return $result;
    } else {
        return FALSE;
    }
}

function build_main_menu($parent, $menu) {
    $html = "";
    if (isset($menu['parents'][$parent])) {
        foreach ($menu['parents'][$parent] as $itemId) {
            if (!isset($menu['parents'][$itemId])) {
                $html .= "<li><a href='" . base_url() . $menu['items'][$itemId]->link . "'>" . $menu['items'][$itemId]->nama_menu . "</a></li>";
            }
            if (isset($menu['parents'][$itemId])) {
                $html .= "<li class='dropdown'><a href='" . base_url() . $menu['items'][$itemId]->link . "'>" . $menu['items'][$itemId]->nama_menu . "</a>";
                $html .= "<ul>";
                $html .= build_sub_menu($itemId, $menu);
                $html .= "</ul>";
                $html .= "</li>";
            }
        }
    }
    return $html;
}

function build_sub_menu($parent, $menu) {
    $html = "";
    foreach ($menu['parents'][$parent] as $itemId) {
        $html .= "<li><a href='" . base_url() . $menu['items'][$itemId]->link . "'>" . $menu['items'][$itemId]->nama_menu . "</a></li>";
    }
    return $html;
}
?>

<!-- Include main_menu() where you want to display the menu -->
<ul class="main-menu__list">
    <?php echo main_menu(); ?>
</ul>