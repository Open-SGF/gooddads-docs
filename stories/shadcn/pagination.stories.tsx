import type { Meta, StoryObj } from '@storybook/react'

import {
	Pagination,
	PaginationContent,
	PaginationEllipsis,
	PaginationItem,
	PaginationLink,
	PaginationNext,
	PaginationPrevious,
} from '../../resources/js/Components/ui'

/**
 * Pagination with page navigation, next and previous links.
 */
const meta = {
	title: 'shadcn/Pagination',
	component: Pagination,
	tags: ['autodocs'],
	argTypes: {},
	render: (args) => (
		<Pagination {...args}>
			<PaginationContent>
				<PaginationItem>
					<PaginationPrevious size={'icon'} href='#' />
				</PaginationItem>
				<PaginationItem>
					<PaginationLink size={'lg'} href='#'>
						1
					</PaginationLink>
				</PaginationItem>
				<PaginationItem>
					<PaginationLink size={'lg'} href='#'>
						2
					</PaginationLink>
				</PaginationItem>
				<PaginationItem>
					<PaginationLink size={'lg'} href='#'>
						3
					</PaginationLink>
				</PaginationItem>
				<PaginationItem>
					<PaginationEllipsis />
				</PaginationItem>
				<PaginationItem>
					<PaginationNext size={'icon'} href='#' />
				</PaginationItem>
			</PaginationContent>
		</Pagination>
	),
	parameters: {
		layout: 'centered',
	},
} satisfies Meta<typeof Pagination>

export default meta

type Story = StoryObj<typeof meta>

/**
 * The default form of the pagination.
 */
export const Default: Story = {}
