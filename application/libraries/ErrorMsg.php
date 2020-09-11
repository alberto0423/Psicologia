<?php
class ErrorMsg{
    public function error_form($field = FALSE, $type = FALSE, $icons = FALSE, $cols = FALSE)
    {
        if (form_error($field)) {
            $html = '';
            $html .= '<div class="' . $cols .'"><div class="alert"><div class="alert-' . $type . ' text-center">
                        '. $icons . ' ' . form_error($field) . '
                      </div></div></div>';
            return $html;
        } else {
            return  FALSE;
        }
    }

	public function error_form_text($text = FALSE, $type = FALSE, $icons = FALSE, $cols = FALSE)
	{
		if ($text) {
			$html = '';
			$html .= '<div class="' . $cols .'"><div class="alert"><div class="alert-' . $type . ' text-center">
                        '. $icons . ' ' . $text . '
                      </div></div></div>';
			return $html;
		} else {
			return  FALSE;
		}
	}
}
